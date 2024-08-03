// userRoutes.js

const express = require('express');
const router = express.Router();
const mongoose = require('mongoose');
router.use(express.urlencoded({ extended: true }));
router.use(express.json());
//router.use(bodyParser.json());

// Importa el modelo de usuario
const destinatario = require('../models/destinatario');

// Ruta para obtener todos los usuarios
router.get('/', async (req, res) => {
    try {
        const desti = await destinatario.find(); // Buscar todos los usuarios en la base de datos
        res.json(desti); // Enviar la lista de usuarios como respuesta JSON
    } catch (error) {
        res.status(500).json({ message: error.message });
    }
});

router.get('/:id', async (req, res) => {
    try {
        const des = await destinatario.findById(req.params.id);
        if (!des) {
            return res.status(404).json({ message: 'Libro no encontrado' });
        }
        res.json(des);
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
        const nuevoDes = new destinatario({
            nombre: req.body.nombre,
            cargo: req.body.cargo,
            
            // Puedes agregar más campos según el modelo
        });

        // Guardar el nuevo libro en la base de datos
        const savedDest = await nuevoDes.save();

        // Enviar el libro recién creado como respuesta JSON
        res.status(201).json(savedDest);
    } catch (error) {
        // Manejar errores y enviar una respuesta de error
        res.status(500).json({ message: error.message });
    }
});
router.put('/:id', async (req, res) => {
    try {
        const { title, author } = req.body;
        const updatedDes = await destinatario.findByIdAndUpdate(
            req.params.id,
            { title, author },
            { new: true }
        );
        if (!updatedDes) {
            return res.status(404).json({ message: 'destinatario no encontrado' });
        }
        res.json(updatedDes);
    } catch (error) {
        res.status(500).json({ message: error.message });
    }
});

router.delete('/:id', async (req, res) => {
    try {
        const deletedBook = await destinatario.deleteOne({_id: req.params.id});
        if (!deletedBook) {
            return res.status(404).json({ message: 'destinatario no encontrado' });
        }
        res.json({ message: 'destinatario eliminado correctamente' });
    } catch (error) {
        res.status(500).json({ message: error.message });
    }
});

module.exports = router;
