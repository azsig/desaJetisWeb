const express = require('express');
const router = express.Router();
const beritaController = require('../controllers/beritaController');

router.get('/', beritaController.getBerita);
router.get('/:id', beritaController.getBeritaById);

module.exports = router;