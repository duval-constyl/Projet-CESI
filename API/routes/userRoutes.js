const usersCtrl = require('../controllers/usersCtrl')

const router = require('express').Router()

router.post('/addUser',usersCtrl.addUser)
router.put('/updateUser/:id',usersCtrl.updateUser)
router.delete('/deleteUser/:id',usersCtrl.deleteUser)
router.get('/getUser/:id',usersCtrl.getUser)
router.get('/getUser',usersCtrl.getallUsers)

module.exports = router