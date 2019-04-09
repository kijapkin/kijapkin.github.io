import React, {Component} from 'react';
import {
	Platform, 
	Navigator, 
	View, 
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
import {Root, Container, Toast, Spinner} from "native-base";

import stylesAuth from "../components/styles/auth";

import LogoCrown from "../resources/crown.svg";
import LogoKameya from "../resources/kameya.svg";
import LogoCompany from "../resources/company.svg";

const HOST = "https://dev.kameya.if.ua";

const instructions = Platform.select({
	ios		: 'iOS',
	android	: 'Android'
});

export default class Auth extends Component {
	
	constructor(props, context){
		super(props, context);
		
		console.log('constructor Auth');
		
		this.state = {
			screen		: 'index',
			
			phone		: '',
			pass		: '',
			disabled	: true,
			
			authSpinner	: false
		};
	};
	
	show(){
		console.log('screen: '+this.state.screen);
		
		//const {navigation} = this.props;
		//return navigation.navigate('Reg');
		
		switch(this.state.screen){
			case 'index':
				return this.index();
			break;
			case 'loginIndex':
				return this.loginIndex();
			break;
			case 'loginPass':
				return this.loginPass();
			break;
		}
	};
	
	index(){
		return (
			<View style={stylesAuth.btns}>
				<TouchableHighlight 
					style={stylesAuth.authBtn} 
					underlayColor="#B5B5B5" 
					onPress={() => {
						this.setState({
							screen : 'loginIndex'
						});
						
						//alert('click 1');
					}}
				>
					<Text style={stylesAuth.buttonText}>Увійти як клієнт</Text>
				</TouchableHighlight>
				
				<TouchableHighlight 
					style={stylesAuth.regBtn} 
					underlayColor="#B5B5B5" 
					onPress={() => {
						return this.props.navigation.push('Reg');
						
						//alert('click 2');
					}}
				>
					<Text style={stylesAuth.buttonText}>Реєстрація</Text>
				</TouchableHighlight>
				
				<TouchableHighlight 
					style={stylesAuth.guestBtn} 
					underlayColor="#B5B5B5" 
					onPress={this.onPressGuest.bind(this)} 
				>
					<Text style={stylesAuth.buttonTextInv}>Пропустити</Text>
				</TouchableHighlight>
			</View>
		);
	};
	
	async onPressGuest(){
		console.log('onPressGuest');
		
		try {
			await AsyncStorage.setItem('guest', '1');
			
			await AsyncStorage.setItem('token', '');
			await AsyncStorage.setItem('token_time', '0');
			await AsyncStorage.setItem('token_expires', '0');
		} catch (error) {
			console.log('error:');
			console.log(error.message);
			
			Toast.show({
				text	: "Виникла помилка",
				//type	: "success"
			});
			
			return false;
		};
		
		console.log('Done.');
		
		return this.props.navigation.push('Index');
	};
	
	loginIndex(){
		return (
			<View style={stylesAuth.authForm}>
				<View style={stylesAuth.phoneLabelContainer}>
					<Text style={stylesAuth.phoneLabel}>Номер телефону</Text>
				</View>
				<View style={stylesAuth.phoneInputContainer}>
					<Text style={stylesAuth.phonePrefix}>+380</Text>
					<TextInputMask 
						ref={ref => (this.myPhoneText = ref)} 
						value={this.state.phone} 
						onChangeText={(phone) => this.setState({phone})} 
						checkText={this.onCheckPhone.bind(this)} 
						style={stylesAuth.phoneInput}
						type={'custom'} 
						options={{
							mask		: '(99) 99 99 999'
						}} 
						placeholder="(__) __ __ ___" 
						placeholderTextColor="#e5e5e5" 
						selectionColor="#6f282e"
						maxLength={14} 
						autoFocus={true} 
						keyboardType="numeric"
					/>
				</View>
				<View style={stylesAuth.vector}></View>
				<View style={stylesAuth.nextBtnContainer}>
					<TouchableHighlight 
						style={(!this.state.disabled ? stylesAuth.nextBtn : stylesAuth.disabledBtn)} 
						underlayColor="#B5B5B5" 
						onPress={() => {
							console.log('onPress1');
							
							if(this.state.phone.length == 14){
								this.setState({
									disabled	: true,
									screen		: 'loginPass'
								});
							}else{
								Toast.show({
									text	: "Введіть номер телефону",
									type	: "danger"
								})
							}
						}}
					>
						<Text style={stylesAuth.buttonText}>Далі</Text>
					</TouchableHighlight>
				</View>
			</View>
		);
	};
	
	loginPass(){
		return (
			<View style={stylesAuth.authForm}>
				<Spinner style={this.state.authSpinner ? stylesAuth.spinner : stylesAuth.hidden} color='#6f282e' />
				<View style={!this.state.authSpinner ? stylesAuth.phoneLabelContainer : stylesAuth.hidden}>
					<Text style={stylesAuth.phoneLabel}>Пароль</Text>
				</View>
				<View style={!this.state.authSpinner ? stylesAuth.phoneInputContainer : stylesAuth.hidden}>
					<TextInput 
						ref={ref => (this.myPassText = ref)} 
						value={this.state.pass} 
						onChangeText={this.onChangePass.bind(this)} 
						style={stylesAuth.passInput}
						placeholderTextColor="#e5e5e5" 
						selectionColor="#6f282e"
						maxLength={15} 
						autoFocus={true} 
						secureTextEntry={true}
					/>
				</View>
				<View style={stylesAuth.vector}></View>
				<View style={stylesAuth.nextBtnContainer}>
					<TouchableHighlight 
						style={(!this.state.disabled ? stylesAuth.nextBtn : stylesAuth.disabledBtn)} 
						underlayColor="#B5B5B5" 
						onPress={this.loginFunction.bind(this)} 
					>
						<Text style={stylesAuth.buttonText}>Увійти</Text>
					</TouchableHighlight>
				</View>
			</View>
		);
	};
	
	//
	
	onCheckPhone(prev, next){
		this.setState({
			disabled : (next.length == 14 ? false : true)
		});
		
		//return true;
		return next.length > 14 ? false : true;
	};
	
	onChangePass(value){
		this.setState({
			disabled : ((value.length > 4 && value.length < 16) ? false : true)
		});
		
		if(value.length > 15){
			return false;
		}else{
			this.setState({pass : value});
			
			return true;
		}
	};
	
	loginFunction(){
		console.log("phone: "+this.state.phone+"\npass: "+this.state.pass);
		
		if(this.state.pass.length < 5){
			Toast.show({
				text	: "Мінімальна довжина паролю - 5 символів",
				type	: "warning"
			})
		}else if(this.state.pass.length > 15){
			Toast.show({
				text	: "Максимальна довжина паролю - 15 символів",
				type	: "warning"
			})
		}else{
			var phone = '380'+this.state.phone.replace(/\D+/g, "");
			
			console.log("phone2: "+phone);
			
			this.setState({
				authSpinner	: true,
				disabled	: true
			});
			
			fetch(
				HOST+'/api/user/login', 
				{
					method	: 'POST',
					headers	: {
						Accept: 'application/json',
						'Content-Type': 'application/json',
					},
					body	: JSON.stringify({
						phone		: phone,
						password	: this.state.pass
					}),
				}
			)
			.then((response) => response.json())
			.then((responseJson) => {
				console.log('responseJson:');
				console.log(responseJson);
				
				Toast.show({
					text	: responseJson.message,
					//type	: "success"
				});
				
				if(responseJson.status){
					try {
						AsyncStorage.setItem('guest', '0');
						
						AsyncStorage.setItem('token', responseJson.token.toString());
						AsyncStorage.setItem('token_time', responseJson.time.toString());
						AsyncStorage.setItem('token_expires', responseJson.expires.toString());
					} catch (error) {
						console.log('auth error:');
						console.log(error.message);
						
						this.setState({
							authSpinner	: false,
							disabled	: false
						});
						
						Toast.show({
							text	: "Виникла помилка",
							//type	: "success"
						});
						
						return false;
					};
					
					console.log('auth ok');
					
					this.props.navigation.navigate('Index', {
						authData : {
							token 	: responseJson.token,
							time 	: responseJson.time,
							expires	: responseJson.expires
						}
					});
					
					//return this.props.navigation.replace('Index');
				}else{
					this.setState({
						authSpinner	: false,
						disabled	: false
					});
				}
			})
			.catch((error) => {
				console.log('error:');
				console.log(error);
				
				this.setState({
					authSpinner	: false,
					disabled	: false
				});
				
				Toast.show({
					text	: "Виникла помилка",
					//type	: "success"
				});
			});
			
			/*
			setTimeout(() => (
				this.setState({
					authSpinner	: false,
					disabled	: false
				})
			), 3000);
			*/
					
			/*
			Toast.show({
				text	: "Авторизація",
				//type	: "success"
			});
			*/
		}
	};
	
	//
	
	render(){
		return (
			<Root>
				<Container style={stylesAuth.layout}>
					<View style={stylesAuth.bkg}>
						<ImageBackground source={require('../resources/111A3124.jpg')} style={stylesAuth.image}>
							<LinearGradient 
								colors={['transparent', '#FFFFFF']} 
								start={{x : 0.5, y : 0.25}} 
								end={{x : 0.5, y : 0.75}} 
								style={stylesAuth.rectangle} 
							></LinearGradient>
						</ImageBackground>
					</View>
					
					<View style={stylesAuth.logo}>
						<LogoCrown width={stylesAuth.logoCrown.width} height={stylesAuth.logoCrown.height} style={stylesAuth.logoCrown} />
						<LogoKameya width={stylesAuth.logoName.width} height={stylesAuth.logoName.height} style={stylesAuth.logoName} />
					</View>
					
					{this.show()}
					
					<View style={stylesAuth.textFooter}>
						<Text style={stylesAuth.text}>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</Text>
						<Text style={stylesAuth.text}>Aenean massa. <Text style={stylesAuth.link}>Privace police</Text></Text>
					</View>
				</Container>
			</Root>
		);
	}
};
