import React from 'react';
import {StyleSheet} from 'react-native';

const stylesPreloader = StyleSheet.create({
	layout					: {
		flex			: 1,
		alignItems		: 'center'
	},
	group			: {
		position		: 'absolute',
		width			: 193,
		top				: '42%',
		justifyContent	: 'center',
		alignItems		: 'center'
	},
	crown			: {
		width			: 36,
		height			: 63
	},
	name			: {
		marginTop		: 10.56,
		width			: 193,
		height			: 38
	},
	company		: {
		marginTop		: 12,
		width			: 139, 
		height			: 8
	}
});

export default stylesPreloader;
