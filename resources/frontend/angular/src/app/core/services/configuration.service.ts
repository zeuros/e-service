import {Injectable} from '@angular/core';
import {BehaviorSubject} from 'rxjs';

export class Configuration {
  prestationList: string[];
}

@Injectable({
  providedIn: 'root'
})
export class ConfigurationService {
  configuration$ = new BehaviorSubject<Configuration>({
      prestationList: ['Esthéticienne', 'Pharmacienne', 'Magicienne', 'Shonenne', 'Saucisse', 'Tomate']
  });

  constructor() {
  }
}
