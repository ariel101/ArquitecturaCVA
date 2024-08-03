const express = require('express');
//var app = require('./routes/api');
var app = express();

const PORT = 3000;

app.listen(PORT, () => {
    console.log(`Servidor escuchando en el puerto ${PORT}`);
});
