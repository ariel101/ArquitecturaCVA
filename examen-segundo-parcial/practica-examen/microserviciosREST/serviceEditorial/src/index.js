const express = require('express');
var app = require('./routes/api');

const PORT = 3002;

app.listen(PORT, () => {
    console.log(`Servidor escuchando en el puerto ${PORT}`);
});

