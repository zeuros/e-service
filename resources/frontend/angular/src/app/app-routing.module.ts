import {NgModule} from '@angular/core';
import {RouterModule, Routes} from '@angular/router';

import {AppController} from './app.controller';
import {SearchPageComponent} from './core/components/search-page/search-page.component';
import {NewPostingPageComponent} from './core/components/new-posting-page/new-posting-page.component';
import {routerConfig} from './core/config/router-config.const';
import {YourAccountComponent} from "./core/components/your-account/your-account.component";
import {AuthGuard} from "./core/guards/auth.guard";
import {LoginComponent} from "./core/components/login/login.component";

const routes: Routes = [
  {
    path: '',
    component: SearchPageComponent,
    data: {
      title: AppController.trans().home,
    },
  },
  {
    path: 'login',
    component: LoginComponent,
    data: {
      title: 'Bienvenue sur votre compte',
    },
  },
  {
    path: 'nouvelle-annonce',
    canActivate: [AuthGuard],
    component: NewPostingPageComponent,
    data: {
      title: 'Nouvelle annonce',
    },
  },
  {
    path: 'votre-compte',
    canActivate: [AuthGuard],
    component: YourAccountComponent,
    data: {
      title: 'Votre compte',
    },
  },
  {
    path: routerConfig.user.base,
    canActivate: [AuthGuard],
    loadChildren: () => import('./lazy/users/users.module').then(mod => mod.UsersModule),
    data: {
      title: 'Users (unused)',
      animation: 'state1',
    },
  },

  // otherwise redirect to home
  { path: '**', redirectTo: '' }
];

@NgModule({
  imports: [RouterModule.forRoot(routes, { relativeLinkResolution: 'legacy' })],
  exports: [RouterModule]
})
export class AppRoutingModule { }
