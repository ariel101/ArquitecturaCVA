// userRoutes.js

const express = require('express');
const router = express.Router();
const mongoose = require('mongoose');
router.use(express.urlencoded({ extended: true }));
router.use(express.json());
//router.use(bodyParser.json());

// Importa el modelo de usuario
const libros = require('../models/libros');

// Ruta para obtener todos los usuarios
router.get('/', async (req, res) => {
    try {
        const libr = await libros.find(); // Buscar todos los usuarios en la base de datos
        res.json(libr); // Enviar la lista de usuarios como respuesta JSON
    } catch (error) {
        res.status(500).json({ message: error.message });
    }
});

router.get('/:id', async (req, res) => {
    try {
        const book = await libros.findById(req.params.id);
        if (!book) {
            return res.status(404).json({ message: 'Libro no encontrado' });
        }
        res.json(book);
    } catch (error) {
        res.status(500).json({ message: error.message });
    }
});


//crear un nuevo libro
router.post('/', async (req, res) => {
    try {
        // Extraer los datos del libro del cuerpo de la solicitud
        //const { title, author, publicationYear } = req.body;
        // if (!req.body) {
        //     return res.status(400).json({ message: 'Cuerpo de la solicitud vacío o no es un objeto JSON válido.' });
        // }
        

        // Crear una instancia del modelo Book con los datos del libro
        const newBook = new libros({
            title: req.body.title,
            author: req.body.author,
            publicationYear: req.body.publicationYear
            // Puedes agregar más campos según el modelo
        });

        // Guardar el nuevo libro en la base de datos
        const savedBook = await newBook.save();

        // Enviar el libro recién creado como respuesta JSON
        res.status(201).json(savedBook);
    } catch (error) {
        // Manejar errores y enviar una respuesta de error
        res.status(500).json({ message: error.message });
    }
});
router.put('/:id', async (req, res) => {
    try {
        const { title, author, publicationYear } = req.body;
        const updatedBook = await libros.findByIdAndUpdate(
            req.params.id,
            { title, author, publicationYear },
            { new: true }
        );
        if (!updatedBook) {
            return res.status(404).json({ message: 'Libro no encontrado' });
        }
        res.json(updatedBook);
    } catch (error) {
        res.status(500).json({ message: error.message });
    }
});

router.delete('/:id', async (req, res) => {
    try {
        const deletedBook = await libros.deleteOne({_id: req.params.id});
        if (!deletedBook) {
            return res.status(404).json({ message: 'Libro no encontrado' });
        }
        res.json({ message: 'Libro eliminado correctamente' });
    } catch (error) {
        res.status(500).json({ message: error.message });
    }
});

module.exports = router;
