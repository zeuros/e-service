import {Component, OnInit} from '@angular/core';
import {of, Observable} from 'rxjs';
import {User} from '../../../shared/model/user';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  get users(): Observable<User[]> {
    return of([{
      id: 1,
      name: 'toto',
      mail: 'toto@free.fr',
    }, {
      id: 2,
      name: 'titi',
      mail: 'titi@free.fr',
    }]);
  }
}
