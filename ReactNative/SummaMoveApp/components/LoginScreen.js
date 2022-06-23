import { StyleSheet, Text, View, TouchableOpacity } from 'react-native'
import React, { useState } from 'react'
import { Button, Card, Title, Paragraph, TextInput } from 'react-native-paper';



const LoginScreen = (props) => {



  const [email, setEmail] = useState(null);
  const [password, setPassword] = useState(null);

  const [errormsg, setErrormsg] = useState("vul gegevens in");

  const [loginReturn, setLoginReturn] = useState(null);



  const sendLoginCredentialsRequest = async () => {
    
    if (password && email != null) {

     const response = await fetch('http://127.0.0.1:8000/api/login', {
        method: 'POST',
        headers: {

          Accept: 'application/json',
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          email: email,
          password: password

        })

      });
      console.log(response)
     const jon = await response.json();
     if(response.status == 200){
      setLoginReturn(jon);
      console.log(jon)
      props.navigation.navigate('Home',{screen:'HomeScreen',
      params: {jon},
      });
     }

      // .then((response) => console.log(response))
      
      
      // .catch((error) => console.error(error))
      
    }
      else {
        setErrormsg('er is iets mis gegaan. Vul opnieuw in.')
      }


    }
    
    return (
      <Card style={styles.cards}>

        <Card.Content>
          <Title>Log in</Title>
          <Card.Actions>
            <TextInput
              label="email"
              mode="outlined"
              //placeholder="email"
              onChangeText={Email => setEmail(Email)}
            />
          </Card.Actions>
          <Card.Actions>
            <TextInput
              label="password"
              mode="outlined"
              //placeholder="passowrd"
              onChangeText={Password => setPassword(Password)}
            />
          </Card.Actions>
          <Card.Actions>
            <Paragraph style={styles.p}>Don't have an account yet?</Paragraph>
            <TouchableOpacity>
              <Text style={{ color: 'blue' }}>Register here.</Text>
            </TouchableOpacity>
          </Card.Actions>
          <Card.Actions>
            <Button icon="send" onPress={sendLoginCredentialsRequest} ></Button>
          </Card.Actions>
          <Paragraph style={styles.p}>{errormsg}</Paragraph>
        </Card.Content>


      </Card>
    )
  }

  export default LoginScreen

  const styles = StyleSheet.create({})