// bookModel.js

const mongoose = require('mongoose');

// Define el esquema para el modelo de libro
const bookSchema = new mongoose.Schema({
    title: {
        type: String,
        required: 'Title is required'
    },
    author: {
        type: String,
        required: 'Author is required'
    },
    publicationYear: {
        type: Number,
        required: 'Publication year is required',
        min: 1000, // Ejemplo: Año mínimo
        max: new Date().getFullYear() // Ejemplo: Año máximo actual
    }
    // Puedes agregar más campos según tus necesidades
});

// Exporta el modelo de libro
module.exports = mongoose.model('libro', bookSchema);
