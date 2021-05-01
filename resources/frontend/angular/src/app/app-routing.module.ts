import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import {AppController} from './app.controller';
import { SearchPageComponent } from './core/components/search-page/search-page.component';
import { NewPostingPageComponent } from './core/components/new-posting-page/new-posting-page.component';
import { routerConfig } from './core/config/router-config.const';
import {YourAccountComponent} from "./core/components/your-account/your-account.component";

const routes: Routes = [
  {
    path: '',
    component: SearchPageComponent,
    data: {
      title: AppController.trans().home
    }
  },
  {
    path: 'nouvelle-annonce',
    component: NewPostingPageComponent,
    data: {
      title: 'Nouvelle annonce'
    }
  },
  {
    path: 'votre-compte',
    component: YourAccountComponent,
    data: {
      title: 'Votre compte'
    }
  },
  {
    path: routerConfig.user.base,
    loadChildren: () => import('./lazy/users/users.module').then(mod => mod.UsersModule)
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes, { relativeLinkResolution: 'legacy' })],
  exports: [RouterModule]
})
export class AppRoutingModule { }
