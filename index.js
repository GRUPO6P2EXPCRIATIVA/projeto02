const express = require('express')
const mongoose = require('mongoose')
const handlebars = require('express-handlebars')
const axios = require('axios')
const stateSchema = require('./models/states')
const countrySchema = require('./models/country')
const PORT = process.env.PORT || 3000;
const app = express()
require('dotenv').config()

// Coletando data da api
axios.get('https://api.apify.com/v2/key-value-stores/TyToNta7jGKkpszMZ/records/LATEST?disableRedirect=true')
  .then(function (response) {
    onSuccess(response)
  })
  .catch(function (error) {
    console.log(error);
  });


// Salvando os dados na database
 function onSuccess(response) {
  const array = response;
  const deaths = array.data.deceased;
  const infected = array.data.infected;
  const recovered = array.data.recovered;
  assignCountryValue(deaths,infected,recovered)
 for(let i = 0; i <= 26; i++) {
    const state = array.data.infectedByRegion[i].state;
    const cases = array.data.infectedByRegion[i].count;
    const lastUpdatedAtSource = array.data.lastUpdatedAtSource;
    //console.log(state + " " + cases + " " + deaths + " " + infected + " " + recovered + " " + lastUpdatedAtSource + " " );

    assignStateValue(state, cases,lastUpdatedAtSource)

  }
  
}

function assignStateValue(state, cases,lastUpdatedAtSource) {

 const stateDataUp = new stateSchema()
 stateDataUp.state = state
 stateDataUp.cases = cases
 stateDataUp.lastUpdatedAtSource = lastUpdatedAtSource
 //stateDataUp.save();
}

function assignCountryValue(deaths,infected,recovered) {

  const countryDataUp = new countrySchema()
  countryDataUp.deaths = deaths
  countryDataUp.infected = infected
  countryDataUp.recovered = recovered
  //countryDataUp.save();
 }




// Setup Template Engine e Express
app.set('view engine', 'hbs');
app.engine('hbs', handlebars({
    layoutsDir: __dirname + '/views/layouts',
    extname: 'hbs'
}));
app.engine('handlebars', handlebars({
    layoutsDir: __dirname + '/views/layouts',
}));
app.use(express.static('public'))

// Routing
app.get('/', (req, res) => {
    res.render('home', { layout: 'index' });
});

app.get('/home', (req, res) => {
    res.render('home', { layout: 'index' });
});
app.get('/formulario', (req, res) => {
  res.render('formulario', { layout: 'index' });
});
app.get('/formularios', (req, res) => {
  res.render('formularios', { layout: 'index' });
});
app.get('/dados', (req, res) => {
  res.render('dados', { layout: 'index' });
});
app.get('/noticias', (req, res) => {
  res.render('noticias', { layout: 'index' });
});




// Iniciando Server
app.listen(PORT, err => {
    if (err) throw err;
    console.log(`Servidor rodando ${PORT}`)
})

// Conectando a database
mongoose.connect(process.env.MONGO_URI, {useNewUrlParser: true, useUnifiedTopology: true},()=> {
    console.log("MongoDB Conectada!")
 })
