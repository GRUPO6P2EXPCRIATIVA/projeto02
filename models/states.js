const mongoose = require('mongoose')
const Schema = mongoose.Schema

const stateSchema = new Schema({
    state: String,
    cases: Number,
    lastUpdatedAtSource: Date
})

module.exports = mongoose.model('stateSchema', stateSchema)