const mongoose = require('mongoose')
const Schema = mongoose.Schema

const countrySchema = new Schema({
    deaths: Number,
    infected: Number,
    recovered: Number,
})

module.exports = mongoose.model('countrySchema', countrySchema)

