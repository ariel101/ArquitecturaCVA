const express = require('express');
var app = require('./routes/api');

//const app = express();

//app.use('/api', api);

//app.listen(3000);

const PORT = 3000;

app.listen(PORT, () => {
    console.log(`Servidor escuchando en el puerto ${PORT}`);
});


// app.use((req, res) => {
//   res.send('Hello, world!');
// });