import {Component, OnInit} from '@angular/core';
import {Title} from '@angular/platform-browser';
import {ActivatedRoute, NavigationEnd, Router} from '@angular/router';
import {filter, map, mergeMap} from 'rxjs/operators';

import {AppController} from './app.controller';
import {MainService} from './core/services/main.service';
import {AuthenticationService} from "./core/services/authentication.service";
import {User} from "./shared/model/user";

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss'],
})
export class AppComponent extends AppController implements OnInit {

  user: User;
  private previousPath = '';

  constructor(
    private router: Router,
    private route: ActivatedRoute,
    public mainService: MainService,
    private titleService: Title,
    private authenticationService: AuthenticationService,
  ) {
    super();
    this.authenticationService.user.subscribe(x => this.user = x);
  }

  ngOnInit(): void {
    this.setBrowserTabTitle();
  }

  private setBrowserTabTitle(): void {
    this.router.events.pipe(
      filter(event => event instanceof NavigationEnd),
      map(() => this.route),
      map(route => this.getRouteFirstChild(route)),
      filter(route => route.outlet === 'primary'),
      mergeMap(route => route.data),
    ).subscribe(event => this.titleService.setTitle(this.buildTitle(event['title'])));
  }

  private getRouteFirstChild(route: ActivatedRoute): ActivatedRoute {
    while (route.firstChild) {
      route = route.firstChild;
    }

    return route;
  }

  private buildTitle(pageTitle: string): string {
    if (pageTitle && pageTitle !== this.trans.home) {
      return [pageTitle, this.config.appTitle].join(this.config.browserTabTitleDelimiter);
    }

    return this.config.appTitle;
  }

}
