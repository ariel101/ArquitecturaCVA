var express = require('express');
var app = express();
//const router = express.Router();


var db =  require('../config/db');

var editorialController = require('../controllers/EditorialController');

app.use('/api/editorial', editorialController);

module.exports = app;