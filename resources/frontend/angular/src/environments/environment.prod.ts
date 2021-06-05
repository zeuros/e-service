import { AppEnvironment } from '../app/core/interfaces/app-environment.interface';

export const environment: AppEnvironment = {
  production: true,
  baseApiUrl: 'http://homycare.fr/api/',
  security: {
    allowedOrigins: 'http://homycare.fr'
  }
};
