// userRoutes.js

const express = require('express');
const router = express.Router();
const mongoose = require('mongoose');
router.use(express.urlencoded({ extended: true }));
router.use(express.json());
//router.use(bodyParser.json());

// Importa el modelo de usuario
const editorial = require('../models/editorial');

// Ruta para obtener todos los usuarios
router.get('/', async (req, res) => {
    try {
        const libr = await editorial.find(); // Buscar todos los usuarios en la base de datos
        res.json(libr); // Enviar la lista de usuarios como respuesta JSON
    } catch (error) {
        res.status(500).json({ message: error.message });
    }
});

router.get('/:id', async (req, res) => {
    try {
        const book = await editorial.findById(req.params.id);
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
        const newBook = new editorial({
            nombre: req.body.nombre,
            ubicacion: req.body.ubicacion,
            creacion: req.body.creacion
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
        const { nombre, ubicacion, creacion } = req.body;
        const updatedBook = await editorial.findByIdAndUpdate(
            req.params.id,
            { nombre, ubicacion, creacion },
            { new: true }
        );
        if (!updatedBook) {
            return res.status(404).json({ message: 'editrial no encontrado' });
        }
        res.json(updatedBook);
    } catch (error) {
        res.status(500).json({ message: error.message });
    }
});

router.delete('/:id', async (req, res) => {
    try {
        const deletedBook = await editorial.deleteOne({_id: req.params.id});
        if (!deletedBook) {
            return res.status(404).json({ message: 'editorial no encontrado' });
        }
        res.json({ message: 'editorial eliminado correctamente' });
    } catch (error) {
        res.status(500).json({ message: error.message });
    }
});

module.exports = router;
