const express = require('express');
const bodyParser = require('body-parser');
const session = require('express-session');
const path = require('path');
const passport = require('passport');
const dotenv = require('dotenv');

const desaRoutes = require('./routes/desaRoutes');
const beritaRoutes = require('./routes/beritaRoutes');

dotenv.config();

const app = express();
const PORT = process.env.PORT || 3000;

app.use('/api/desa', desaRoutes);
app.use('/api/berita', beritaRoutes);

app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});

