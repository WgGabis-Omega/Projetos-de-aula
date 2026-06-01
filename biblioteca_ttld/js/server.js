const express = require('express');
const cors = require('cors');

const app = express();

app.use(cors());
app.use(express.json());

const storiesRoutes = require('../js/rotas/stories');
const usersRoutes = require('../js/rotas/users');
const favoritesRoutes = require('../js/rotas/favoritos');

app.use('/stories', storiesRoutes);
app.use('/users', usersRoutes);
app.use('/favorites', favoritesRoutes);

app.listen(3000, () => {
    console.log("Servidor rodando na porta 3000");
});