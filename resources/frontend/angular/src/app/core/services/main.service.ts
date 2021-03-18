import {Injectable} from '@angular/core';
import {BehaviorSubject} from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class MainService {

  openSideNav$ = new BehaviorSubject(false);

  constructor() { }

  toggleSideNav = () => this.openSideNav$.next(!this.openSideNav$.value);
}
