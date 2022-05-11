const productCtrl = require('../controllers/productCtrl.js')

const route = require('express').Router()

route.post('/addProduct',productCtrl.addProduct)
route.put('/updateProduct/:id',productCtrl.updateProduct)
route.delete('/deleteProduct/:id',productCtrl.deleteProduct)
route.get('/getProduct/:id',productCtrl.getProduct)
route.get('/getProduct',productCtrl.getallProducts)


module.exports = route