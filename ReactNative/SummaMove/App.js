import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, View } from 'react-native';

import { createBottomTabNavigator } from '@react-navigation/bottom-tabs';
import { NavigationContainer } from '@react-navigation/native';
import 'react-native-gesture-handler';

import { createStackNavigator } from '@react-navigation/stack';
import { createMaterialBottomTabNavigator } from "react-navigation-material-bottom-tabs";

import AboutScreen from './components/AboutScreen';
import HomeScreen from './components/HomeScreen';

const Stack = createStackNavigator();

function SummaStack() {
  return (
    <Stack.Navigator>
      <Stack.Screen name="stackAbout" component={AboutScreen} />
      
    </Stack.Navigator>
  );
}

const Tab = createMaterialBottomTabNavigator();

function SummaTabs() {
  return (
    <Tab.Navigator>
      <Tab.Screen name="tabHome" component={HomeScreen} />
      <Tab.Screen name="tabSumma" component={SummaStack} />
    </Tab.Navigator>
  );
}

const App = () => {
  return (
    <NavigationContainer>
     <SummaTabs/>
    </NavigationContainer>
  );
}

export default App;

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
});
