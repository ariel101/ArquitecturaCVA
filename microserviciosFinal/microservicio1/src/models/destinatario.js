// bookModel.js

const mongoose = require('mongoose');

// Define el esquema para el modelo de libro
const bookSchema = new mongoose.Schema({
    nombre: {
        type: String,
        required: 'Title is required'
    },
    cargo: {
        type: String,
        required: 'cargo is required'
    }
    
    // Puedes agregar más campos según tus necesidades
});

// Exporta el modelo de libro
module.exports = mongoose.model('destinatario', bookSchema);
