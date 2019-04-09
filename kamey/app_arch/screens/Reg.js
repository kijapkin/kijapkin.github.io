import React, {Component} from 'react';
import {
	Platform, 
	View, 
	Navigator, 
	ImageBackground, 
	Text, 
	TextInput, 
	TouchableOpacity, 
	TouchableHighlight, 
	StyleSheet, 
	AlertIOS
} from 'react-native';
import AsyncStorage from '@react-native-community/async-storage';
import LinearGradient from 'react-native-linear-gradient';
import {TextInputMask} from 'react-native-masked-text'

import stylesReg from "../components/styles/reg";

import LogoCrown from "../resources/crown.svg";
import LogoKameya from "../resources/kameya.svg";
import LogoCompany from "../resources/company.svg";

const instructions = Platform.select({
	ios		: 'iOS',
	android	: 'Android'
});

export default class Auth extends Component {
	
	constructor(props, context){
		super(props, context);
		
		this.state = {
			screen : 'stage1'
		};
	};
	
	show(){
		console.log('screen: '+this.state.screen);
		
		switch(this.state.screen){
			case 'stage1':
				return this.stage1();
			break;
			case 'stage2':
				return this.stage2();
			break;
		}
	};
	
	stage1(){
		return (
			<View style={stylesReg.form}>
				<View style={stylesReg.labelNameContainer}>
					<Text style={stylesReg.label}>Ваше ім’я та прізвище</Text>
				</View>
				<View style={stylesReg.inputContainer}>
					<TextInput 
						ref={ref => (this.myNameText = ref)} 
						onChangeText={this.onChangeName.bind(this)} 
						style={stylesReg.input} 
						placeholder="Камея" 
						placeholderTextColor="#e5e5e5" 
						selectionColor="#6f282e"
						autoFocus={true} 
					/>
				</View>
				<View style={stylesReg.vector}></View>
				<View style={stylesReg.labelMarginContainer}>
					<Text style={stylesReg.label}>Номер телефону</Text>
				</View>
				<View style={stylesReg.vector}></View>
				<View style={stylesReg.labelMarginContainer}>
					<Text style={stylesReg.label}>Дата народження</Text>
				</View>
				<View style={stylesReg.vector}></View>
				<View style={stylesReg.nextBtnContainer}>
					<TouchableHighlight 
						style={stylesReg.nextBtn} 
						underlayColor="#B5B5B5" 
						onPress={() => {
							alert('click next btn');
						}}
					>
						<Text style={stylesReg.buttonText}>Далі</Text>
					</TouchableHighlight>
				</View>
			</View>
		);
	};
	
	//
	
	onChangePhone(value){
		console.log('onChangeTextPhone');
		console.log('v: '+value);
	};
	
	onCheckPhone(prev, next){
		return next.length > 14 ? false : true;
	};
	
	//
	
	onChangePass(value){
		console.log('onChangePass');
		console.log('v: '+value);
	};
	
	onCheckPass(prev, next){
		return next.length > 14 ? false : true;
	};
	
	//
	
	onChangeName(value){
		console.log('onChangeName');
		console.log('v: '+value);
	};
	
	//
	
	render(){
		return (
			<View style={stylesReg.layout}>
				<View style={stylesReg.bkg}>
					<ImageBackground source={require('../resources/111A3124.jpg')} style={stylesReg.image}>
						<LinearGradient 
							colors={['transparent', '#FFFFFF']} 
							start={{x : 0.5, y : 0.25}} 
							end={{x : 0.5, y : 0.75}} 
							style={stylesReg.rectangle} 
						></LinearGradient>
					</ImageBackground>
				</View>
				
				<View style={stylesReg.logo}>
					<LogoCrown width={stylesReg.logoCrown.width} height={stylesReg.logoCrown.height} style={stylesReg.logoCrown} />
					<LogoKameya width={stylesReg.logoName.width} height={stylesReg.logoName.height} style={stylesReg.logoName} />
				</View>
				
				{this.show()}
				
				<View style={stylesReg.textFooter}>
					<Text style={stylesReg.text}>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</Text>
					<Text style={stylesReg.text}>Aenean massa. <Text style={stylesReg.link}>Privace police</Text></Text>
				</View>
			</View>
		);
	}
};
