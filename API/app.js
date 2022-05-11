//import mysql from "mysql2/promise"
const express = require('express')
const cors = require('cors')

const app = express()

var cor = {
    origin: 'https://localhost:8081'
}

// Middleware 

app.use(cors(cor))

app.use(express.json())

app.use(express.urlencoded({ extended: true}))


//routes

const route  = require('./routes/productRoutes.js')
app.use('/api/products', route)

const router  = require('./routes/userRoutes.js')
app.use('/api/users', router)

//test api

app.get('/', (req, res) => {
    res.json({ message: 'hello in my api'})
})

//port

const PORT = process.env.PORT || 8080

//run the server

app.listen(PORT, ()=> {
    console.log(`server is running on port ${PORT}`)
})