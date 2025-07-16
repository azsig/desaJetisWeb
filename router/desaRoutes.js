const express = require('express');
const router = express.Router();
const desaController = require('../controllers/desaController');

router.get('/deskripsi', desaController.getDeskripsi);
router.get('/statistik', desaController.getStatistik);

module.exports = router;