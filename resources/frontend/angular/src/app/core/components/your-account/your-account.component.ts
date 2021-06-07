import { Component, OnInit } from '@angular/core';
import {AuthenticationService} from "../../services/authentication.service";

@Component({
  selector: 'app-your-account-component',
  templateUrl: './your-account.component.html',
  styleUrls: ['./your-account.component.scss'],
})
export class YourAccountComponent implements OnInit {

  constructor(
    public authenticationService: AuthenticationService,
  ) { }

  ngOnInit(): void {
  }

}
