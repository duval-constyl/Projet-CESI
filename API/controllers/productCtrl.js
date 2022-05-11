const db = require('../models')

//create main model
const Product = db.products


//main work


//1. create product 

const addProduct = async (req, res) => {

    let info = {
        title: req.body.title,
        price: req.body.price,
        description: req.body.description,
        photo: req.body.photo 
    }

    const product = await Product.create(info)
    res.status(200).send(product) 
}

//2. get all the products

const getallProducts = async (req, res) => {

    let products = await Product.findAll({})
    res.status(200).send(products)
}

//3. get a specific the product

const getProduct = async (req, res) => {

    let id = req.params.id
    let product = await Product.findOne({ where: { id: id}})
    res.status(200).send(product)
}

//4. update a product

const updateProduct = async (req, res) => {

    let id = req.params.id
    const product = await Product.update(req.body, { where: { id: id}})
    res.status(200).send(product)
}

//5. delete a product

const deleteProduct = async (req, res) => {

    let id = req.params.id
    await Product.destroy({ where: { id: id}})
    res.status(200).send('Product is deleted')
}

module.exports = {
    addProduct,
    getallProducts,
    getProduct,
    deleteProduct,
    updateProduct
}