import { Table } from './Interfaces';
import { InMemoryTable } from './Table';

class InMemoryDatabase {
  /**
   * Maintain a reference to self.
   */
  private static inMemoryDatabase: InMemoryDatabase;
  /**
   * List of databases and the list of tables inside them.
   */
  private database: Map<string, Map<string, Table>>;

  // Private constructor.
  private constructor() {
    this.database = new Map();
  }

  /**
   * Returns an instance of the inMemoryDatabase class.
   * @returns {InMemoryDatabase}
   */
  static getInstance() {
    if (this.inMemoryDatabase === undefined) {
      this.inMemoryDatabase = new InMemoryDatabase();
    }
    return this.inMemoryDatabase;
  }

  createDatabase(name: string) {
    if (!name) {
      throw new Error('Database name cannot be empty');
    }
    this.database.set(name, new Map());
  }

  createTable(dbName: string, tableName: string) {
    if (!dbName) {
      throw new Error('Database name cannot be empty');
    }
    if (!tableName) {
      throw new Error('Table name cannot be empty');
    }
    const db = this.database.get(dbName);
    const table: Table | InMemoryTable = new InMemoryTable();
    db?.set(tableName, table);
  }
}
