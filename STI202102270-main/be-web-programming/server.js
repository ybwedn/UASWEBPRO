const mysql = require('mysql2');
const express = require('express');
const bodyParser = require('body-parser');
const cors = require('cors');

const app = express();
const port = process.env.PORT || 3000;

app.use(bodyParser.json());
app.use(cors());

// Database connection
const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'db_perpustakaan'
});

db.connect(err => {
    if (err) {
        console.error('Database connection failed:', err.stack);
        return;
    }
    console.log('Connected to database.');
});

// Sample data structure
let data = [];

// Routes
app.get('/api/book', (req, res) => {
    db.query('SELECT * FROM tb_perpus', (err, results) => {
        if (err) {
            return res.status(500).json({ error: err.message });
        }
        res.json(results);
    });
});

app.post('/api/book', (req, res) => {
    const newData = req.body;
    db.query('INSERT INTO tb_perpus SET ?', newData, (err, result) => {
        if (err) {
            return res.status(500).json({ error: err.message });
        }
        res.status(201).json({ id: result.insertId, ...newData });
    });
});

app.put('/api/book/:id', (req, res) => {
    const id = req.params.id;
    const updatedData = req.body;
    db.query('UPDATE tb_perpus SET ? WHERE id = ?', [updatedData, id], (err, result) => {
        if (err) {
            return res.status(500).json({ error: err.message });
        }
        res.json({ id, ...updatedData });
    });
});

app.delete('/api/book/:id', (req, res) => {
    const id = req.params.id;
    db.query('DELETE FROM tb_perpus WHERE id = ?', [id], (err, result) => {
        if (err) {
            return res.status(500).json({ error: err.message });
        }
        res.status(204).end();
    });
});

app.listen(port, () => {
    console.log(`Server is running on port ${port}`);
});
