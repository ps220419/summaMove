import { StyleSheet, Text, View, FlatList } from 'react-native'
import React from 'react'
import { useEffect, useState, } from 'react';
import { Button, Card, Paragraph, Title, Switch } from 'react-native-paper';




const Item = ({ item, props, naam, omschrijving, img }) =>{

    // console.log({img})

    
   return (

        <Card style={styles.cards}>
      
          <Card.Content>
            <Title>{naam}</Title>
            <Paragraph>{omschrijving}</Paragraph>
          </Card.Content>
          <Card.Cover style={styles.img}
          
          source={{ uri: img }} />
          
          <Card.Actions>
            {/* <Button onPress={() => props.navigation.push('DetailStack', { item }, { props })} >SEE MORE</Button> */}
          </Card.Actions>
        </Card>
      
      );
      
} 

const HomeScreen = (props) => {


    const [loading1, setLoading1] = useState(true)
    const [data1, setData1] = useState(null)
    const [isSwitchOn, setIsSwitchOn] = useState(false);

    const onToggleSwitch = () => setIsSwitchOn(!isSwitchOn);
  
   

    useEffect(() => {
        fetch('http://127.0.0.1:8000/api/oefenings')
            .then((response) => response.json())
            .then((json) => setData1(json))
            .catch((error) => console.error(error))
            .finally(() => setLoading1(false));


            
    }, []);


    const renderItemNL = ({ item }) => (
    
        <Item  
            style={styles.item} 
            naam={item.naamNL} 
            omschrijving={item.omschrijvingNL} 
            img={item.img}
            props={props}
            item={item} 
        />
      );
      const renderItemEN = ({ item }) => (
    
        <Item  
            style={styles.item} 
            naam={item.naamEN} 
            omschrijving={item.omschrijvingEN} 
            img={item.img}
            props={props}
            item={item} 
        />
      );

      

    return (

        <View style={{ flex: 1, padding: 24 }}>

            {isSwitchOn ?
            <>
            {loading1 ? <Text>Loading english...</Text>
                :
                
                (<View style={{ flex: 1 }}>
                    <Text style={{ fontSize: 20, color: 'black', textAlign: 'center', paddingBottom: 10 }}>Exercises:</Text>
                    <Switch value={isSwitchOn} onValueChange={onToggleSwitch} />
                    <FlatList
                        data={data1}
                        keyExtractor={(item, index) => index.toString()}
                        renderItem={renderItemEN}
                        
                    />
                </View>
                )}
            </>
            :(
            <>
             {loading1 ? <Text>Laden (nederlands)...</Text>
                :
                
                (<View style={{ flex: 1 }}>
                    <Text style={{ fontSize: 20, color: 'black', textAlign: 'center', paddingBottom: 10 }}>Oefeningen:</Text>
                    <Switch value={isSwitchOn} onValueChange={onToggleSwitch} />
                    <FlatList
                        data={data1}
                        keyExtractor={(item, index) => index.toString()}
                        renderItem={renderItemNL}
                        
                    />
                </View>
                )}
            </>
            )}
           
        </View>
    )
}

export default HomeScreen

const styles = StyleSheet.create({
    item: {
        backgroundColor: '#018AED',
        padding: 20,
        marginVertical: 8,
        marginHorizontal: 16,
    },

    buttonAdd: {
        width: '100px',
        height: '25px',
        textAlign: 'center',
        alignSelf: 'center',
        paddingBottom: '20px',

    },
    buttonb: {
        width: '125px',
        height: '25px',
        textAlign: 'center',
        alignSelf: 'center',
        margin: '2%',

    },
    viewcon: {
        flex: 1,
        flexDirection: 'row',
    },
    title: {
        fontSize: 32,
    },
    img:{
    width: "100%",
    marginTop: "3%",
    },
    cards: {
        padding: 20,
        margin: "5%",
    },
    deleteButton: {
        width: '15px',
        height: '15px',

    },
    item: {
        padding: 30,
    },
})