import {Component, OnInit} from '@angular/core';

import {AppController} from '../../../app.controller';
import {MainService} from '../../services/main.service';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.scss']
})
export class HeaderComponent extends AppController implements OnInit {

  constructor(
    public mainService: MainService,
  ) {
    super();
  }

  ngOnInit(): void {
  }

}
