import React, { Component } from 'react';
import {
	View
} from 'react-native';

import stylesPreloader from "../components/styles/preloader";

import LogoCrown from "../resources/crown.svg";
import LogoKameya from "../resources/kameya.svg";
import LogoCompany from "../resources/company.svg";

export default class Preloader extends Component {
	render(){
		return (
			<View style={stylesPreloader.layout}>
				<View style={stylesPreloader.group}>
					<View style={stylesPreloader.crown}>
						<LogoCrown width={38} height={64} />
					</View>
					<View style={stylesPreloader.name}>
						<LogoKameya width={191} height={38} />
					</View>
					<View style={stylesPreloader.company}>
						<LogoCompany width={139} height={8} />
					</View>
				</View>
			</View>
		);
	}
}
