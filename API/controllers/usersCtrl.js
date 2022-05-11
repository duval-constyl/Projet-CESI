const db = require('../models')

//create main model
const Users = db.users


const EMAIL_REGEX     = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
const PASSWORD_REGEX  = /^(?=.*\d).{4,8}$/;
//main work


//1. create product 

const addUser = async (req, res) => {

    let info = {
        name: req.body.name,
        surname: req.body.surname,
        password: req.body.password,
        email: req.body.email ,
        localisation: req.body.localisation 
    }
        const name = req.body.name,
        surname = req.body.surname,
        password = req.body.password,
        email = req.body.email ,
        localisation = req.body.localisation 

    if (email == null || name == null || password == null || surname == null || localisation == null) {
        res.status(400).json({ 'error': 'missing parameters' });
     }
   
     if (name.length >= 13 || name.length <= 4) {
        res.status(400).json({ 'error': 'wrong username (must be length 5 - 12)' });
     }
   
     if (!EMAIL_REGEX.test(email)) {
        res.status(400).json({ 'error': 'email is not valid' });
     }
   
     if (!PASSWORD_REGEX.test(password)) {
        res.status(400).json({ 'error': 'password invalid (must length 4 - 8 and include 1 number at least)' });
     }

     const user = await Users.create(info)
        res.status(200).send(user)
     /*Users.findOne({
        attributes: ['email'],
        where: { email: email }
      })
      .then(function(userFound) {
        done(null, userFound);
      })
      .catch(function(err) {
        return res.status(500).json({ 'error': 'unable to verify user' });
      });*/
      /*if(!Users.findOne({
        attributes: ['email'],
        where: { email: email }
      })){
        
      }else{
        return res.status(409).json({ 'error': 'user already exist' });
      }*/
   
    
}

//2. get all the products

const getallUsers = async (req, res) => {

    let users = await Users.findAll({})
    res.status(200).send(users)
}

//3. get a specific the product

const getUser = async (req, res) => {

    let id = req.params.id
    let user = await Users.findOne({ where: { id: id}})
    res.status(200).send(user)
}

//4. update a product

const updateUser = async (req, res) => {

    let id = req.params.id
    const user = await Users.update(req.body, { where: { id: id}})
    res.status(200).send(user)
}

//5. delete a product

const deleteUser = async (req, res) => {

    let id = req.params.id
    await Users.destroy({ where: { id: id}})
    res.status(200).send('The User has been deleted')
}

module.exports = {
    addUser,
    getallUsers,
    getUser,
    deleteUser,
    updateUser
}