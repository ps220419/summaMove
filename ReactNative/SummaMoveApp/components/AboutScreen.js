import { StyleSheet, Text, View } from 'react-native'
import React from 'react'
import { useState, } from 'react';

const AboutScreen = () => {

  const [versie, setVersie] = useState(1.001)

  return (
    <View style={styles.container}>
      <Text style={{flex: 3, marginTop: "20%", width: "70%"}}>Summa Move is fitness app voor studenten bij Summa College. In deze app kunnen gebruikers diverse oefeningen bekijken met een foto en uitleg. ingelogde gebruikers kunnen hun eigen prestaties zien en nieuwe prestaties toevoegen.</Text>
      <Text style={{flex: 1}}>Hulp nodig? neem contact op: +31 62465672</Text>
      <Text style={{ marginBottom: "0%"}}>versie: {versie}</Text>
    </View>
    
  )
}

export default AboutScreen

const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: '#fff',
        alignItems: 'center',
        justifyContent: 'center',
        padding: "5%",
      },
})