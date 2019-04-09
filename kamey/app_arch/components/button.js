import React, { Component } from 'react';
import {
	View,
	Text,
	TouchableHighlight
} from 'react-native';

import stylesButtons from "./styles/buttons";

export default class defaultButton extends Component {
	render(){
		return(
			<TouchableHighlight 
				style={stylesButtons.default} 
				underlayColor="#B5B5B5" 
				onPress={() => {
					this.props.onPress();
				}}
			>
				<Text style={stylesButtons.buttonText}>{this.props.text}</Text>
			</TouchableHighlight>
		)
	}
}
