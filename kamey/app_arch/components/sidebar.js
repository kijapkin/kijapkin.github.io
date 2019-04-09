import React, { Component } from 'react';
import {
	SwitchIOS,
	View,
	Text
} from 'react-native';

import stylesSideBar from "./styles/sidebar";
import Button from './button';

export default class Sidebar extends Component {
	render(){
		return (
			<View style={stylesSideBar.container}>
				<Text style={stylesSideBar.panelText}>Control Panel</Text>
				<Button 
					onPress={() => {
						this.props.closeDrawer();
					}}
					text="Close Drawer"
				/>
			</View>
		)
	}
}
