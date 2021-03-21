import {Component, OnInit} from '@angular/core';
import {AppController} from '../../../app.controller';
import {MainService} from '../../services/main.service';

@Component({
  selector: 'app-footer',
  templateUrl: './footer.component.html',
  styleUrls: ['./footer.component.scss']
})
export class FooterComponent extends AppController implements OnInit {

  constructor(
    public mainService: MainService,
  ) {
    super();
  }

  ngOnInit(): void {
  }
}
