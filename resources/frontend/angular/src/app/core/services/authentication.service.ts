import {Injectable} from '@angular/core';
import {Router} from '@angular/router';
import {HttpClient} from '@angular/common/http';
import {BehaviorSubject, Observable} from 'rxjs';
import {map} from 'rxjs/operators';
import {User} from "../../shared/model/user";

@Injectable({ providedIn: 'root' })
export class AuthenticationService {
  private user$: BehaviorSubject<User>;
  public user: Observable<User>;

  constructor(
    private router: Router,
    private http: HttpClient
  ) {
    this.user$ = new BehaviorSubject<User>(JSON.parse(localStorage.getItem('user')));
    this.user = this.user$.asObservable();
  }

  public get userValue(): User {
    return this.user$.value;
  }

  login(email: string, password: string) {
    return this.http.post<any>('auth/login', { email, password })
      .pipe(map(user => {
        // store user details and basic auth credentials in local storage to keep user logged in between page refreshes
        user.authdata = window.btoa(email + ':' + password);
        localStorage.setItem('user', JSON.stringify(user));
        this.user$.next(user);
        return user;
      }));
  }

  logout() {
    // remove user from local storage to log user out
    localStorage.removeItem('user');
    this.user$.next(null);
    this.router.navigate(['/login']);
  }
}
