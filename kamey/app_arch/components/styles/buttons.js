import { StyleSheet, PixelRatio } from 'react-native';
const deviceScreen = require('Dimensions').get('window')

const stylesButtons = StyleSheet.create({
	default		: {
		backgroundColor		: 'white',
		padding				: 15,
		borderColor			: '#eeeeee',
		borderWidth			: 1,
		borderBottomWidth	: 1 / PixelRatio.get(),
		borderBottomColor	: '#aaaaaa',
		marginRight			: 20,
		marginLeft			: 20,
		alignSelf			: 'center',
	},
	buttonText	: {}
});

export default stylesButtons;
