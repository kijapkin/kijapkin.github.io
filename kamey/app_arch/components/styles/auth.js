import React from 'react';
import {StyleSheet} from 'react-native';
import Dimensions from 'Dimensions';

const wOrign = 812;
const hOrigin = 375;

const {height, width} = Dimensions.get('window');

const imgR = 375 / 346;
const imgW = (width / 100) * 100;
const imgH = imgW / imgR;

const stylesAuth = StyleSheet.create({
	layout					: {
		flex			: 1,
		//justifyContent	: 'center',
		alignItems		: 'center'
	},
	bkg						: {
		alignItems		: 'center',
		//width			: '100%', // 519
		//height			: '50%',
		width			: '100%',
		height			: imgH, // 348 - 42.86, 346 - 42.61
		zIndex			: 2,
	},
	image					: {
		//flex			: 1,
		//justifyContent	: 'center',
		//alignItems		: 'center',
		//alignSelf		: 'stretch',
		//resizeMode		: 'contain',
		width			: imgW, // 519
		height			: imgH, // 348 - 42.86, 346 - 42.61
		backgroundColor	: 'transparent',
		zIndex			: 3
	},
	rectangle				: {
		position		: 'absolute',
		top				: (height / 100) * 9.48,
		//top				: '23%', // 77
		//top				: '22.25%', // 77
		width			: '100%', // 375
		//width			: 0,
		height			: imgH, // 33.37
		//height			: '78.32%', // 271
		zIndex			: 4
	},
	logo					: {
		position		: 'absolute',
		//top					: '40.64%',
		top					: '47.41%',
		//top				: (height / 100) * 40.64, // 385 // 47.41
		//top				: '4.8%',
		zIndex			: 5,
		//flex			: 1,
		alignItems		: 'center',
		width			: '33.6%', // 126 // 33.6%
		//height			: '9.11%', // 74
		//backgroundColor	: '#FF0000'
	},
	logoCrown				: {
		width			: (((width / 100) * 33.6) / 100) * 19.05, // 38 // 19.05%
		height			: (((height / 100) * 9.11) / 100) * 56.76, // 64 // 56.76%
		
		//width			: '19.05%',
		//height			: '56.76%',
		
		//backgroundColor	: '#0037FF'
	},
	logoName				: {
		marginTop		: '5.18%',
		width			: (width / 100) * 33.6, // 191 // 100%
		height			: (((height / 100) * 9.11) / 100) * 32.43, // 38
		
		//width			: '100%',
		//height			: '32.43%',
		
		//backgroundColor	: '#008E0C'
	},
	btns					: {
		position		: 'absolute',
		top				: '64.04%',
		//top				: '55.67%',
		//top				: (height / 100) * 55.67, // 520 // 64.04
		alignItems		: 'center',
		width			: '89.33%',
		zIndex			: 6,
		//backgroundColor	: '#02691C'
	},
	authBtn					: {
		width			: '100%',
		height			: (height / 100) * 6.9, // 56 // 6.9%
		backgroundColor	: '#6f282e',
		justifyContent	: 'center',
		alignItems		: 'center',
		shadowColor		: 'rgba(111, 40, 46, 0.4)',
		shadowOffset	: {
			width: 4, 
			height: 0
		},
		shadowRadius	: 14,
		borderRadius	: 5,
	},
	regBtn					: {
		marginTop		: (height / 100) * 2.46, // 20 // 2.46
		width			: '100%',
		height			: (height / 100) * 6.9,
		backgroundColor	: '#6f282e',
		justifyContent	: 'center',
		alignItems		: 'center',
		shadowColor		: 'rgba(111, 40, 46, 0.4)',
		shadowOffset	: {
			width: 4, 
			height: 0
		},
		shadowRadius	: 14,
		borderRadius	: 5,
	},
	guestBtn				: {
		marginTop		: (height / 100) * 2.46, // 20 // 2.46
		width			: '100%',
		height			: (height / 100) * 6.9,
		backgroundColor	: '#ffffff',
		justifyContent	: 'center',
		alignItems		: 'center',
		borderRadius	: 5,
		borderColor		: '#6f282e',
		borderStyle		: 'solid',
		borderWidth		: 1,
	},
	buttonText				: {
		color			: '#ffffff',
		fontFamily		: 'SF Pro Text',
		fontSize		: 16,
		fontWeight		: '400',
		letterSpacing	: 0.83,
		//backgroundColor	: '#035F9C',
	},
	buttonTextInv			: {
		color			: '#6f282e',
		fontFamily		: 'SF Pro Text',
		fontSize		: 16,
		fontWeight		: '400',
		letterSpacing	: 0.83,
	},
	textFooter				: {
		position		: 'absolute',
		bottom			: '3.45%',
		//top				: (height / 100) * 93.35, // 758 // 93.35
		//alignSelf		: 'center',
		width			: '69.60%',
		//backgroundColor	: '#0051CB'
	},
	text					: {
		//width			: '100%',
		textAlign		: 'center',
		color			: '#000000',
		fontFamily		: 'SF Pro Text',
		fontSize		: 8,
		fontWeight		: '400',
		letterSpacing	: 0.83,
		lineHeight		: 13,
	},
	link					: {
		textDecorationLine		: 'underline',
		fontSize				: 8,
		fontWeight				: '400',
		letterSpacing			: 0.83,
		lineHeight				: 13,
	},
	authForm				: {
		position		: 'absolute',
		top				: '63.05%',
		width			: '100%',
		alignItems		: 'center',
		//zIndex			: 6,
		//backgroundColor	: '#FF4B4B',
	},
	spinner					: {
		width			: '70.93%',
		height			: 58,
	},
	hidden					: {
		width			: 0,
		height			: 0,
		display			: "none"
	},
	phoneContainer			: {
		width			: '70.93%',
		//backgroundColor	: '#049C03',
	},
	phoneLabelContainer		: {
		width			: '70.93%',
		height			: 24,
		//backgroundColor	: '#000D96'
	},
	phoneLabel				: {
		width			: '100%',
		height			: 24,
		textAlign		: 'left',
		color			: '#c7d4df',
		fontFamily		: 'SF Pro Text',
		fontSize		: 11,
		fontWeight		: '400',
		letterSpacing	: 0.83,
		lineHeight		: 18,
	},
	phoneInputContainer		: {
		position		: 'relative',
		width			: '70.93%',
		height			: 34,
		//backgroundColor	: '#185A14'
	},
	phonePrefix				: {
		width			: '20.68%', // 55 // 20.68%
		height			: 24,
		color			: '#6f282e',
		fontFamily		: 'SF Pro Text',
		fontSize		: 20,
		fontWeight		: '400',
		letterSpacing	: 0.83,
		//letterSpacing	: 2.83,
		lineHeight		: 20,
		//backgroundColor	: '#F1ED93'
	},
	phoneInput				: {
		width			: '78.95%', // 135 // 50.75% // 210 // 78.95%
		height			: 22,
		borderWidth		: 0,
		fontFamily		: 'SF Pro Text',
		color			: '#6f282e',
		fontSize		: 20,
		fontWeight		: '400',
		letterSpacing	: 0.83,
		//letterSpacing	: 2.83,
		lineHeight		: 20,
		position		: 'absolute',
		top				: 0,
		left			: '20.68%',
		padding			: 0
	},
	vector					: {
		//position		: 'absolute',
		marginTop		: '1.48%', // 584 // 12
		left			: 0,
		width			: '100%',
		height			: 0,
		borderColor		: '#692832',
		borderStyle		: 'solid',
		borderWidth		: 1,
	},
	nextBtnContainer		: {
		//backgroundColor	: '#035F9C',
		marginTop		: '9.61%', // 66 // 8.13%
		width			: '89.33%', // 335 // 89.33%
		height			: '6.9%', // 56 // 6.9%
	},
	nextBtn					: {
		width			: '100%',
		height			: (height / 100) * 6.9, // 56 // 6.9%
		backgroundColor	: '#6f282e',
		justifyContent	: 'center',
		alignItems		: 'center',
		shadowColor		: 'rgba(111, 40, 46, 0.4)',
		shadowOffset	: {
			width: 4, 
			height: 0
		},
		shadowRadius	: 14,
		borderRadius	: 5,
	},
	disabledBtn				: {
		width			: '100%',
		height			: (height / 100) * 6.9, // 56 // 6.9%
		backgroundColor	: '#B5B5B5',
		justifyContent	: 'center',
		alignItems		: 'center',
		shadowOffset	: {
			width: 4, 
			height: 0
		},
		shadowRadius	: 14,
		borderRadius	: 5,
		zIndex			: 7
	},
	passInput				: {
		width			: '100%',
		height			: 22,
		borderWidth		: 0,
		fontFamily		: 'SF Pro Text',
		color			: '#6f282e',
		fontSize		: 20,
		fontWeight		: '400',
		letterSpacing	: 0.83,
		//letterSpacing	: 2.83,
		lineHeight		: 20,
		padding			: 0
	},
});

export default stylesAuth;
