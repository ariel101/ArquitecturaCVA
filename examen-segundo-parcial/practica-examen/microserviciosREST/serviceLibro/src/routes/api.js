var express = require('express');
var app = express();
//const router = express.Router();


var db =  require('../config/db');

var libroController = require('../controllers/LibroController');

app.use('/api/libro', libroController);

module.exports = app;