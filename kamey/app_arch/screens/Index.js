import React, {Component} from 'react';
import {Platform, Navigator, View, Image, Text, TouchableOpacity, StyleSheet} from 'react-native';
import AsyncStorage from '@react-native-community/async-storage';

import Drawer from 'react-native-drawer';

//import Auth from '../screens/Auth';

import Sidebar from '../components/sidebar';
import Preloader from '../components/preloader';

const instructions = Platform.select({
	ios		: 'iOS',
	android	: 'Android'
});

const styles = StyleSheet.create({
	container	: {
		backgroundColor	: '#7699dd',
		padding			: 20,
		flex			: 1,
	},
	button	: {
		backgroundColor	: 'white',
		borderWidth		: 1,
		borderColor		: 'black',
		padding			: 10,
	}
});

const drawerStyles = {
	drawer	: {
		shadowColor		: "#000000",
		shadowOpacity	: 0.8,
		shadowRadius	: 0,
	}
};

export default class Index extends Component{
	
	constructor(props, context){
		super(props, context);
		
		this.state = {
			showPreloader 		: true,
			
			userAuthorized		: false,
			userGuest			: false,
			
			userToken			: '',
			userTime			: 0,
			userExpires			: 0,
			
			drawerDisabled		: false,
			tweenHandlerPreset	: null,
			
			drawerType			: 'overlay',
			openDrawerOffset	: 100,
			closedDrawerOffset	: 0,
			panOpenMask			: .1,
			panCloseMask		: .9,
			relativeDrag		: false,
			panThreshold		: .25,
			tweenHandlerOn		: false,
			tweenDuration		: 350,
			tweenEasing			: 'linear',
			acceptDoubleTap		: false,
			acceptTap			: false,
			acceptPan			: true,
			tapToClose			: false,
			negotiatePan		: false,
			side				: "left",
		};
		
		this._checkAuth(props);
	};
	
	openDrawer(){
		alert('open');
		this.drawer.open();
	};
	
	closeDrawer(){
		alert('close');
		this.drawer.close();
	};
	
	tweenHandler(ratio){
		if(!this.state.tweenHandlerPreset){ return {} }
		return tweens[this.state.tweenHandlerPreset](ratio)
	};
	
	async _checkAuth(props){
		const {navigation} = props;
		
		/*
		const authData = navigation.getParam('authData', false);
		
		console.log("authData: ");
		console.log(authData);
		
		if(authData){
			this.setState({
				userToken		: authData.token,
				userTime		: authData.time,
				userExpires		: authData.expires,
				showPreloader	: false,
				userAuthorized	: true,
				userGuest		: false
			});
			
			return false;
		};
		*/
		
		try {
			var guest = parseInt(await AsyncStorage.getItem('guest'));
			
			console.log("guest: "+guest);
			
			guest = isNaN(guest) ? 0 : guest;
			
			console.log("guest2: "+guest);
			
			if(guest){
				this.setState({
					showPreloader	: false,
					userAuthorized	: false,
					userGuest		: true
				});
				
				return false;
			};
		} catch (error) {
			console.log('failed check guest:');
			console.log(error.message);
		};
		
		try {
			var token		= await AsyncStorage.getItem('token') || '';
			
			console.log("token:");
			console.log(token);
			
			token = (typeof token) != 'string' ? '' : token;
			
			console.log("token2:");
			console.log(token);
		} catch (error) {
			console.log('failed get token:');
			console.log(error.message);
			
			return false;
		};
		
		const token_time 	= await AsyncStorage.getItem('token_time') || 0;
		const token_expires	= await AsyncStorage.getItem('token_expires') || 0;
		
		console.log("token_time:");
		console.log(token_time);
			
		console.log("token_expires:");
		console.log(token_expires);
		
		if(token && token.length > 10){
			this.setState({
				userToken		: token,
				userTime		: token_time,
				userExpires		: token_expires,
				showPreloader	: false,
				userAuthorized	: true,
				userGuest		: false
			});
			
			return false;
		};
		
		return navigation.push('Auth');
		
		this.setState({
			showPreloader	: false,
			userAuthorized	: false,
			userGuest		: false
		});
		
		return false;
	};
	
	_login(){
		try {
			AsyncStorage.setItem('guest', '0');
		} catch (error) {
			console.log('auth error:');
			console.log(error.message);
			
			return false;			
		};
		
		return this.props.navigation.replace('Auth');
	};
	
	_logout(){
		try {
			AsyncStorage.setItem('guest', '0');
			
			AsyncStorage.setItem('token', '');
			AsyncStorage.setItem('token_time', '0');
			AsyncStorage.setItem('token_expires', '0');
		} catch (error) {
			console.log('auth error:');
			console.log(error.message);
			
			return false;			
		};
		
		return this.props.navigation.replace('Auth');
	};
	
	render(){
		// preloader
		if(this.state.showPreloader){
			return (<Preloader />);
		};
		
		//if(!this.state.userAuthorized && !this.state.userGuest){
			//return (<View />);
			//return this.props.navigation.navigate('Auth');
			//return (<Auth />);
		//};
		
		//return (<View style={styles.container}><Text>Home</Text></View>);
		
		//return this.props.navigation.navigate('Auth');
		
		return (
			<Drawer
				ref					=	{c => this.drawer = c}
				type				=	{this.state.drawerType}
				animation			=	{this.state.animation}
				openDrawerOffset	=	{this.state.openDrawerOffset}
				closedDrawerOffset	=	{this.state.closedDrawerOffset}
				panOpenMask			=	{this.state.panOpenMask}
				panCloseMask		=	{this.state.panCloseMask}
				relativeDrag		=	{this.state.relativeDrag}
				panThreshold		=	{this.state.panThreshold}
				content				=	{<Sidebar closeDrawer={() => {alert('start close');this.drawer.close();}} />}
				styles				=	{drawerStyles}
				disabled			=	{this.state.drawerDisabled}
				tweenHandler		=	{this.tweenHandler.bind(this)}
				tweenDuration		=	{this.state.tweenDuration}
				tweenEasing			=	{this.state.tweenEasing}
				acceptDoubleTap		=	{this.state.acceptDoubleTap}
				acceptTap			=	{this.state.acceptTap}
				acceptPan			=	{this.state.acceptPan}
				tapToClose			=	{this.state.tapToClose}
				negotiatePan		=	{this.state.negotiatePan}
				changeVal			=	{this.state.changeVal}
				side				=	{this.state.side}
			>
				<View style={styles.container}>
					<Text>Home</Text>
					<TouchableOpacity style={styles.button} onPress={this.openDrawer.bind(this)}>
						<Text>Open Drawer</Text>
					</TouchableOpacity>
					<TouchableOpacity style={styles.button} onPress={this.closeDrawer.bind(this)}>
						<Text>Close Drawer</Text>
					</TouchableOpacity>
					{(!this.state.userAuthorized ? (<TouchableOpacity style={styles.button} onPress={this._login.bind(this)}>
						<Text>Login</Text>
					</TouchableOpacity>) : null)}
					{(this.state.userAuthorized ? (<TouchableOpacity style={styles.button} onPress={this._logout.bind(this)}>
						<Text>Log out</Text>
					</TouchableOpacity>) : null)}
				</View>
			</Drawer>
		);
	}
};
