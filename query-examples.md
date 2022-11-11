Consultas Graphql

**Consultar listado de usuarios**

    {
	 users(orderBy: [{ column: NAME, order: ASC }])
	 {
	  id
	  name
	  email
	 }
	}

**Consultar un usuario**

    {
	 user(id : 2)
     {
      id
      name
      email
     }
    }

 **Insertar un usuario**
 El el segundo parametro son los datos que quiere retornar

     mutation {
	  createUser(
	   name:"Federico Rivera"
	   email:"fede@mail.com"
	   password: "secret"
      ){
	   id
	   name
	   email
      }
     }

 **Actualizar un usuario**

     mutation {
      updateUser(
        id: 12
        name:"Emelonda Mendez"
        email:"emelonda@mail.com"
      ){
        id
        name
        email
      }
    }

 **Eliminar un usuario**

     mutation {
      deleteUser(id: 13){
        id
      }
    }

https://stackedit.io/app#
