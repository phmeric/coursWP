import * as $ from 'jquery';
import 'bootstrap';
/**
 * @name app.ts
 * @author Vaelia
 * @version 1.0.0
 * @abstract Entry point for app loading
 */
import "./main.scss";
export class App{
    public constructor(){
        console.log("App is running after platform");

    }
}
$(document).ready(() => {
    const app: App = new App();
});