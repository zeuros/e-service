/**
 * Global Configuration, i.e. languages, locale, date formats etc.
 *
 * Shared settings for all environments: dev, prod, stage etc.
 */
import { AppConfig } from '../interfaces/app-config.interface';

export const appConfig: AppConfig = {
  appTitle: 'HomyCare - partagez plus qu\'un service ;)',
  browserTabTitleDelimiter: ' | ',
  defaultLanguage: 'fr_FR',
  availableLanguages: ['fr_FR', 'en_GB', 'pl_PL']
};
