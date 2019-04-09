import React from 'react';
import {StyleSheet} from 'react-native';
import Dimensions from 'Dimensions';

const wOrign = 812;
const hOrigin = 375;

const {height, width} = Dimensions.get('window');

const imgR = 375 / 346;
const imgW = (width / 100) * 100;
const imgH = imgW / imgR;

const stylesReg = StyleSheet.create({
	layout					: {
		flex			: 1,
		alignItems		: 'center'
	},
	bkg						: {
		alignItems		: 'center',
		width			: '100%',
		height			: imgH, // 348 - 42.86, 346 - 42.61
		zIndex			: 2,
	},
	image					: {
		width			: imgW, // 519
		height			: imgH, // 348 - 42.86, 346 - 42.61
		backgroundColor	: 'transparent',
		zIndex			: 3
	},
	rectangle				: {
		position		: 'absolute',
		top				: (height / 100) * 9.48,
		width			: '100%', // 375
		height			: imgH, // 33.37
		zIndex			: 4
	},
	logo					: {
		position		: 'absolute',
		top				: '36.08%', // 293 // 36.08%
		zIndex			: 5,
		alignItems		: 'center',
		width			: '33.6%', // 126 // 33.6%
	},
	logoCrown				: {
		width			: (((width / 100) * 33.6) / 100) * 19.05, // 38 // 19.05%
		height			: (((height / 100) * 9.11) / 100) * 56.76, // 64 // 56.76%
	},
	logoName				: {
		marginTop		: '5.18%',
		width			: (width / 100) * 33.6, // 191 // 100%
		height			: (((height / 100) * 9.11) / 100) * 32.43, // 38
	},
	buttonText				: {
		color			: '#ffffff',
		fontFamily		: 'SF Pro Text',
		fontSize		: 16,
		fontWeight		: '400',
		letterSpacing	: 0.83,
	},
	textFooter				: {
		position		: 'absolute',
		bottom			: '3.45%',
		width			: '69.60%',
	},
	text					: {
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
	vector					: {
		//position		: 'absolute',
		marginTop		: '1.35%', // 584 // 12
		left			: 0,
		width			: '100%',
		height			: 0,
		borderColor		: '#692832',
		borderStyle		: 'solid',
		borderWidth		: 1,
	},
	nextBtnContainer		: {
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
		zIndex			: 7
	},
	form					: {
		position		: 'absolute',
		top				: '50.86%', // 413 // 50.86
		width			: '100%',
		alignItems		: 'center',
		zIndex			: 6,
	},
	labelNameContainer		: {
		width			: '70.93%',
		height			: 24,
	},
	labelMarginContainer	: {
		width			: '70.93%',
		height			: 24,
		marginTop		: '1.72%'
	},
	label				: {
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
	inputContainer		: {
		position		: 'relative',
		width			: '70.93%',
		height			: 31,
		//backgroundColor	: '#185A14'
	},
	input				: {
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

export default stylesReg;
