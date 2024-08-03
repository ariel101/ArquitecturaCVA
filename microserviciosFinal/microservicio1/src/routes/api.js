var express = require('express');
var app = express();
//var app = require('./routes/api');
//const router = express.Router();


var db =  require('../config/db');

var DestinatatioController = require('../controllers/DestinatarioController');

app.use('/api/destino', DestinatatioController);

module.exports = app;