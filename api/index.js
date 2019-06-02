const express = require('express');
const app = express();         
const bodyParser = require('body-parser');
const port = 3000;
const mysql = require('mysql');


/**
 * Preparando bodyParser para pegar POSTs no 
 * formato URLEncoded e JSON
 */
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

/**
 * Definição de rotas
 */
const router = express.Router();
router.get('/', (req, res) => res.json({ message: 'API funcionando!' }));


/*
* ACESS

router.get('/access', (req, res)=>{ execSQLQuery('SELECT * FROM access', res)} )

router.get('/access/:id?', (req, res) =>{
  let filter = '';
  if(req.params.id) filter = ' WHERE ID=' + parseInt(req.params.id);
  execSQLQuery('SELECT * FROM access' + filter, res);
})

router.delete('/access/:id', (req, res) =>{
  execSQLQuery('DELETE FROM access WHERE ID=' + parseInt(req.params.id), res);
})

router.post('/access', (req, res) =>{
  const name = req.body.name.substring(0,50);
  const description = req.body.description.substring(0,500);

  execSQLQuery(`INSERT INTO access (NAME, DESCRIPTION) VALUES('${name}','${description}')`, res);
});

router.patch('/access/:id', (req, res) =>{
  const id = parseInt(req.params.id);
  const name = req.body.name.substring(0,50);
  const description = req.body.description.substring(0,500);

  execSQLQuery(`UPDATE access SET NAME='${name}', DESCRIPTION='${description}' WHERE ID=${id}`, res);
})
*/

/**
 * User
 */
router.get('/user', (req, res)=>{ execSQLQuery("SELECT * FROM USER", res) } );


/**
 * dengueAnalysis
 */

/**
 * Insert
 */
router.post('/dengueAnalysis', (req, res) =>{
    
    /**
     * TYPES
     */
    const USER_PROFILE = 1;
    const HEALTH_AGENT_PROFILE = 2;
    const EXPERT_PROFILE = 3;
    var additionInputValue = "";
    var additionInputDescription = "";
    const type = parseInt(req.body.typeanalysis);
  
    if(type == USER_PROFILE){

        const question1 = parseInt(req.body.question1);
        const question2 = parseInt(req.body.question2);
        const question3 = parseInt(req.body.question3);

        execSQLQuery(
          `INSERT INTO userProfile
          
          (question1,
          question2,
          question3)

          VALUES(
          '${question1}', 
          '${question2}', 
          '${question3}')`, res, 2); 
        
        additionInputDescription += "USERPROFILE,";
        additionInputValue += `(SELECT MAX(ID) as ID from userProfile),`;
    }

    if(type == HEALTH_AGENT_PROFILE){
        const question1 = parseInt(req.body.question1);
        const question2 = parseInt(req.body.question2);
        const question3 = parseInt(req.body.question3);
        const question4 = parseInt(req.body.question4);
        
        execSQLQuery(
            `INSERT INTO healthAgentProfile
            
            (question1,
            question2,
            question3,
            question4)

            VALUES(
            '${question1}', 
            '${question2}', 
            '${question3}',
            '${question4}')`, res, 2);

          additionInputDescription += "HEALTHAGENTPROFILE,";
          additionInputValue += `(SELECT MAX(ID) as ID from healthAgentProfile),`;
    }

    if(type == EXPERT_PROFILE){
        const question1 = parseInt(req.body.question1);
        const question2 = parseInt(req.body.question2);
        const question3 = parseInt(req.body.question3);
        const question4 = parseInt(req.body.question4);
        const question5 = parseInt(req.body.question5);
        const question6 = parseInt(req.body.question6);
        const question7 = parseInt(req.body.question7);
        const question8 = parseInt(req.body.question8);
        
        execSQLQuery(
            `INSERT INTO expertProfile
            
            (question1,
            question2,
            question3,
            question4,
            question5,
            question6,
            question7,
            question8)

            VALUES(
            '${question1}', 
            '${question2}', 
            '${question3}',
            '${question4}',
            '${question5}',
            '${question6}',
            '${question7}',
            '${question8}')`, res, 2);

        additionInputDescription += "EXPERTPROFILE,";
        additionInputValue += `(SELECT MAX(ID) as ID from expertProfile),`;
    }
    const age = parseInt(req.body.age);
    const weight = parseFloat(req.body.weight);
    const height = parseFloat(req.body.height);
    const SUS_ID = req.body.SUS_ID;
    const status = parseInt(req.body.status);
        

    if(req.body.temperature){
        const temperature = req.body.temperature;
        additionInputDescription += "TEMPERATURE,";
        additionInputValue += `${temperature},`;
    }

    if(req.body.currentDate){
        const currentDate = req.body.currentDate;
        additionInputDescription += "CURRENTDATE,";
        additionInputValue += `${currentDate},`;
    }

    if(req.body.currentTime){
        const currentTime = req.body.currentTime;
        additionInputDescription += "CURRENTTIME,";
        additionInputValue += `${currentTime},`;
    }

    if(req.body.heartBeat){
        const heartBeat = req.body.heartBeat;
        additionInputDescription += "HEARTBEAT,";
        additionInputValue += `${heartBeat},`;
    }

    if(req.body.bloodPressure){
        const bloodPressure = req.body.bloodPressure;
        additionInputDescription += "BLOODPRESSURE,";
        additionInputValue += `${bloodPressure},`;
    }

    if(req.body.symptoms){
        const symptoms = req.body.symptoms.substring(0,255);
        additionInputDescription += "SYMPTOMS,";
        additionInputValue += `${symptoms},`;
    }

    if(req.body.expertSuggestion){
        const expertSuggestion = req.body.expertSuggestion.substring(0,255);
        additionInputDescription += "EXPERTSUGGESTION,";
        additionInputValue += `${expertSuggestion},`;
    }
    
            
    additionInputDescription = 
    additionInputDescription.substring(0,(additionInputDescription.length - 1)); 

    additionInputValue = 
    additionInputValue.substring(0,(additionInputValue.length - 1));
    

    var commaDescription = "";
    var commaValue = "";

    if(additionInputDescription){
      commaDescription = ",";
    }
      
    if(additionInputValue){
      commaValue = ",";
    }
    
    execSQLQuery(
            `INSERT INTO dengueAnalysis
            
            (AGE,
            WEIGHT,
            HEIGHT,
            DATEANALYSIS,
            SUS_ID,
            TYPE,
            STATUS
            
            ${commaDescription}${additionInputDescription})

            VALUES(
            ${age},
            ${weight},
            ${height},
            now(),
            ${SUS_ID}, 
            ${type}, 
            ${status} 
              
            ${commaValue}${additionInputValue}
            )`, res);
});

/**
 * SELECT ID
 */

router.get('/dengueanalysis/:id?', (req, res) =>{

  let filter = '';
  if(req.params.id) filter = 'WHERE ID=' + parseInt(req.params.id);

  execSQLQuery(
    `SELECT * 
      FROM dengueanalysis 
      ${filter}`, res);
})


/**
 * SELECT ID User Profile
 */
router.get('/userProfile/:id?', (req, res) =>{

  let filter = '';
  if(req.params.id) filter = 'WHERE ID=' + parseInt(req.params.id);

  execSQLQuery(
    `SELECT * 
      FROM userProfile 
      ${filter}`, res);
})

/**
 * SELECT ID Health Agent Profile
 */
router.get('/healthAgentProfile/:id?', (req, res) =>{

  let filter = '';
  if(req.params.id) filter = 'WHERE ID=' + parseInt(req.params.id);

  execSQLQuery(
    `SELECT * 
      FROM userProfile 
      ${filter}`, res);
})


/**
 * SELECT ID Expert Profile
 */
router.get('/expertProfile/:id?', (req, res) =>{

  let filter = '';
  if(req.params.id) filter = 'WHERE ID=' + parseInt(req.params.id);

  execSQLQuery(
    `SELECT * 
      FROM expertProfile 
      ${filter}`, res);
})





router.get('/', (req, res) => res.json({ message: 'Api Online' }));

app.use('/', router);


/**
 * Iniciando o servidor
*/
app.listen(port);
console.log('API funcionando!');



function execSQLQuery(sqlQry, res, type = 1){

  const connection = mysql.createConnection({
    host:'localhost',
    port:'3306',
    user:'root',
    password:'',
    database:'dengueanalysisdb'
  });

  if(type == 1)
    connection.query(sqlQry, function(error, results, fields){
      
      res.header("Access-Control-Allow-Origin", "*");

        if(error) 
          res.json(error);
        else
          res.json(results);
        connection.end();
    });
  else
    connection.query(sqlQry, function(error, results, fields){
        
      res.header("Access-Control-Allow-Origin", "*");
      connection.end();
    });

}