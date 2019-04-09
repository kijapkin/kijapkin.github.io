import React from 'react';

import {Image} from 'react-native';
import {createBottomTabNavigator, createStackNavigator, createAppContainer} from "react-navigation";

import Index from "../screens/Index";
import Auth from '../screens/Auth';
import Reg from '../screens/Reg';

//import styles from "../components/styles";

const Routes = createStackNavigator(
	{
		Index 			: {
			screen				: Index,
			navigationOptions	: {
				header		: null
			}
		},
		Auth 			: {
			screen				: Auth,
			navigationOptions	: {
				header		: null
			}
		},
		Reg 			: {
			screen				: Reg,
			navigationOptions	: {
				header		: null
			}
		},
	},
	{
		initialRounteName		: "Index",
		defaultNavigationOptions: {
			header : null
		}
	}
);

const AppContainer = createAppContainer(Routes);

export default AppContainer;
