import { Component, OnInit } from '@angular/core';
import { KeycloakService } from 'keycloak-angular';

@Component({
  selector: 'app-your-account-component',
  templateUrl: './your-account.component.html',
  styleUrls: ['./your-account.component.scss']
})
export class YourAccountComponent implements OnInit {

  constructor(
    private readonly keycloak: KeycloakService,
  ) { }

  ngOnInit(): void {
  }

}
